<?php

namespace App\Models\Enums;

enum ProcurementEnums: string
{
    case BIDDING_DOCUMENT = 'bidding-document';
    case EID_UL_AZHA_PROCUREMENT = 'eid-ul-azha-2019';
    case PAST_PROCUREMENT = 'past-procurement';
    case CURRENT_PROCUREMENT = 'current-procurement';
    case EVALUATION_REPORT = 'evaluation-report';
    case FUTURE_PROCUREMENTS = 'future-procurements';
    case BLACKLISTED_FIRMS = 'blacklisted-firms';

    public function label(): string
    {
        return match ($this) {
            self::BIDDING_DOCUMENT => 'Bidding Document',
            self::EID_UL_AZHA_PROCUREMENT => 'Eid ul Azha',
            self::PAST_PROCUREMENT => 'Past Procurement',
            self::CURRENT_PROCUREMENT => 'Current Procurement',
            self::EVALUATION_REPORT => 'Evaluation Report',
            self::FUTURE_PROCUREMENTS => 'Future Procurements',
            self::BLACKLISTED_FIRMS => 'Blacklisted Firms'
        };
    }

    public static function options(): array
    {
        return [
            self::BIDDING_DOCUMENT->value => self::BIDDING_DOCUMENT->label(),
            self::EID_UL_AZHA_PROCUREMENT->value => self::EID_UL_AZHA_PROCUREMENT->label(),
            self::PAST_PROCUREMENT->value => self::PAST_PROCUREMENT->label(),
            self::CURRENT_PROCUREMENT->value => self::CURRENT_PROCUREMENT->label(),
            self::EVALUATION_REPORT->value => self::EVALUATION_REPORT->label(),
            self::FUTURE_PROCUREMENTS->value => self::FUTURE_PROCUREMENTS->label(),
            self::BLACKLISTED_FIRMS->value => self::BLACKLISTED_FIRMS->label(),
        ];
    }

    public function getRequiredFields(): array
    {
        return match ($this) {
            self::BIDDING_DOCUMENT => [
                'type' => 'required|string',
                'title' => 'required|string|max:255',
                'attachment_url' => 'required|file|mimes:pdf',
                'last_date' => 'required|date',
                'is_active' => 'required|boolean',
            ],
            self::EID_UL_AZHA_PROCUREMENT => [
                'type' => 'required|string',
                'procurement_name' => 'required|string',
                'attachment_url' => 'required|file|mimes:pdf',
                'purchase_order' => 'required|file|mimes:pdf',
                'is_active' => 'required|boolean',
            ],
            self::PAST_PROCUREMENT => [
                'type' => 'required|string',
                'tender_title' => 'required|string|max:255',
                'tender_name' => 'required|string|max:255',
                'procurement_type' => 'required|in:goods,services',
                'publish_date' => 'required|date',
                'close_date' => 'required|date|after:publish_date',
                'department_id' => 'required|exists:departments,id',
                'tender_notice' => 'required|file|mimes:pdf,jpg,jpeg,png',
                'table_handing' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
                'is_active' => 'required|boolean',
            ],
            self::CURRENT_PROCUREMENT => [
                'type' => 'required|string',
                'procurement_title' => 'required|string|max:255',
                'procurement_name' => 'required|string|max:255',
                'procurement_type' => 'required|in:goods,services',
                'publish_date' => 'required|date',
                'close_date' => 'required|date|after:publish_date',
                'department_id' => 'required|exists:departments,id',
                'tender_notice' => 'required|file|mimes:pdf,jpg,jpeg,png',
                'attachment_url' => 'required|file|mimes:pdf',
                'is_active' => 'required|boolean',
            ],
            self::EVALUATION_REPORT => [
                'type' => 'required|string',
                'department_id' => 'required|exists:departments,id',
                'procurement_name' => 'required|string|max:255',
                'publish_date' => 'required|date',
                'close_date' => 'required|date|after:publish_date',
                'first_lowest_firm_name' => 'required|string|max:255',
                'attachment_url' => 'required|file|mimes:pdf',
                'is_active' => 'required|boolean',
            ],
            self::BLACKLISTED_FIRMS => [
                'type' => 'required|string',
                'firm_name' => 'required|string|max:255',
                'blacklist_reason' => 'required|string|max:500',
                'blacklist_type' => 'required|in:temporary,permanent',
                'blacklist_date' => 'required|date',
                'blacklist_end_date' => 'nullable|date|after:blacklist_date',
                'blacklist_remarks' => 'nullable|string|max:500',
                'blacklist_order_attachment' => 'required|file|mimes:pdf,jpg,jpeg,png',
                'is_active' => 'required|boolean',
            ],
            default => [
                'type' => 'required|string',
                'title' => 'required|string|max:255',
                'is_active' => 'required|boolean',
            ]
        };
    }
}
