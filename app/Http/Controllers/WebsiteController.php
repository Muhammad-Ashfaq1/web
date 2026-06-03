<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use App\Models\Career;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Enums\ProcurementEnums;
use App\Models\GalleryImage;
use App\Models\Membership;
use App\Models\ProcurementAttachment;
use App\Models\RightToInformation;
use App\Models\SwmOperations;
use App\Models\TeamMember;
use App\Models\WmcPmuSummary;

class WebsiteController extends Controller
{
    public function careers()
    {
        $careers = Career::active()->latest()->get();

        return view('career', compact('careers'));
    }

    public function gallery()
    {
        $images = GalleryImage::where('is_active', true)->latest()->get();

        return view('pictures', compact('images'));
    }

    public function teamLwmc()
    {
        $teamMembers = TeamMember::active()->with('designation')->latest()->get();

        return view('team-lwmc', compact('teamMembers'));
    }

    public function departments()
    {
        $departments = Department::active()->orderBy('name')->get();

        return view('departments', compact('departments'));
    }

    public function departmentEmployees($id)
    {
        $department = Department::active()->findOrFail($id);
        $employees = Employee::active()
            ->where('department_id', $department->id)
            ->with('designation')
            ->orderBy('designation_id')
            ->get();

        return view('department-employees', compact('department', 'employees'));
    }

    public function boardMembers()
    {
        $boardMembers = BoardMember::active()->ordered()->get();

        return view('bods', compact('boardMembers'));
    }

    public function memberships()
    {
        $memberships = Membership::active()->latest()->get();

        return view('membership', compact('memberships'));
    }

    public function rightToInformation()
    {
        $right_to_informations = RightToInformation::active()->with('designation')->latest()->get();

        return view('rightinfo', compact('right_to_informations'));
    }

    public function wmcPmuSummaries()
    {
        $summaries = WmcPmuSummary::active()->latest('date')->get();

        return view('pmu-summary', compact('summaries'));
    }

    public function serviceDetails(SwmOperations $operation)
    {
        abort_unless($operation->is_active, 404);

        $operations = SwmOperations::active()
            ->latest('updated_at')
            ->get();

        return view('service-details', compact('operation', 'operations'));
    }

    public function biddingDocuments()
    {
        return $this->showByType(ProcurementEnums::BIDDING_DOCUMENT->value);
    }

    public function showByType(string $type)
    {
        $enum = ProcurementEnums::tryFrom($type);

        if (! $enum) {
            abort(404, 'Invalid procurement type');
        }

        $attachments = ProcurementAttachment::where('type', $type)
            ->where('is_active', true)
            ->with('department')
            ->latest()
            ->get();

        $formattedAttachments = $attachments->map(function (ProcurementAttachment $item) {
            $attachmentData = [
                'id' => $item->id,
                'title' => $item->display_title,
                'department' => $item->department->name ?? 'N/A',
                'created_at' => $item->created_at,
                'formatted_date' => $item->created_at?->format('d M Y') ?? 'N/A',
                'type' => $item->type?->value ?? $item->type,
                'attachment_url' => $item->attachment_url,
            ];

            switch ($item->type) {
                case ProcurementEnums::BIDDING_DOCUMENT:
                    $attachmentData['last_date'] = $item->last_date?->format('d M Y') ?? 'N/A';
                    break;

                case ProcurementEnums::PAST_PROCUREMENT:
                    $attachmentData['tender_name'] = $item->tender_name;
                    $attachmentData['procurement_type'] = ucfirst($item->procurement_type ?? 'N/A');
                    $attachmentData['publish_date'] = $item->publish_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['close_date'] = $item->close_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['tender_notice_url'] = $item->tender_notice_url;
                    $attachmentData['table_handing_url'] = $item->table_handing_url;
                    break;

                case ProcurementEnums::CURRENT_PROCUREMENT:
                    $attachmentData['procurement_name'] = $item->procurement_name;
                    $attachmentData['procurement_type'] = ucfirst($item->procurement_type ?? 'N/A');
                    $attachmentData['publish_date'] = $item->publish_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['close_date'] = $item->close_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['tender_notice_url'] = $item->tender_notice_url;
                    break;

                case ProcurementEnums::EID_UL_AZHA_PROCUREMENT:
                    $attachmentData['purchase_order_url'] = $item->purchase_order_url;
                    break;

                case ProcurementEnums::EVALUATION_REPORT:
                    $attachmentData['procurement_name'] = $item->procurement_name;
                    $attachmentData['publish_date'] = $item->publish_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['close_date'] = $item->close_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['first_lowest_firm_name'] = $item->first_lowest_firm_name;
                    $attachmentData['attachment_url'] = $item->evaluation_report_attachment_url ?: $item->attachment_url;
                    break;

                case ProcurementEnums::BLACKLISTED_FIRMS:
                    $attachmentData['blacklist_reason'] = $item->blacklist_reason;
                    $attachmentData['blacklist_type'] = ucfirst($item->blacklist_type ?? 'N/A');
                    $attachmentData['blacklist_date'] = $item->blacklist_date?->format('d M Y') ?? 'N/A';
                    $attachmentData['blacklist_end_date'] = $item->blacklist_end_date?->format('d M Y') ?? 'Permanent';
                    $attachmentData['blacklist_remarks'] = $item->blacklist_remarks ?? 'N/A';
                    $attachmentData['blacklist_order_attachment_url'] = $item->blacklist_order_attachment_url;
                    break;
            }

            return $attachmentData;
        });

        return view('common.procurement-attachments', [
            'attachments' => $formattedAttachments,
            'typeLabel' => $enum->label(),
            'typeValue' => $type,
            'allTypes' => ProcurementEnums::cases(),
        ]);
    }
}
