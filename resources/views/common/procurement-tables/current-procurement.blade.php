<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 25%;">Procurement Title</th>
                <th style="width: 20%;">Procurement Name</th>
                <th style="width: 10%;">Type</th>
                <th style="width: 10%;">Department</th>
                <th style="width: 10%;">Publish Date</th>
                <th style="width: 10%;">Close Date</th>
                <th style="width: 10%;">Tender Notice</th>
                <th style="width: 10%;">Bid Documents</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attachments as $index => $attachment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <strong>{{ $attachment['title'] }}</strong>
                    </td>
                    <td>{{ $attachment['procurement_name'] ?? 'N/A' }}</td>
                    <td>
                        <span class="badge badge-success text-muted">{{ $attachment['procurement_type'] }}</span>
                    </td>
                    <td>
                        <span class="badge badge-info text-muted">{{ $attachment['department'] }}</span>
                    </td>
                    <td>{{ $attachment['publish_date'] }}</td>
                    <td>
                        <span class="text-warning font-weight-bold">{{ $attachment['close_date'] }}</span>
                    </td>
                    <td>
                        @if($attachment['tender_notice_url'])
                            <a href="{{ $attachment['tender_notice_url'] }}" target="_blank" class="btn btn-sm btn-info">
                                <i class="fas fa-file-alt"></i> Notice
                            </a>
                        @endif
                        @if(!$attachment['tender_notice_url'])
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td>
                        @if($attachment['attachment_url'])
                            <a href="{{ $attachment['attachment_url'] }}" target="_blank" class="btn btn-sm btn-primary mb-1">
                                <i class="fas fa-download"></i> Document
                            </a>
                        @endif
                        @if(!$attachment['attachment_url'])
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
