<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 25%;">Tender Title</th>
                <th style="width: 20%;">Tender Name</th>
                <th style="width: 10%;">Type</th>
                <th style="width: 10%;">Department</th>
                <th style="width: 10%;">Publish Date</th>
                <th style="width: 10%;">Close Date</th>
                <th style="width: 10%;">Tender Notice</th>
                <th style="width: 10%;">Tender Handing</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attachments as $index => $attachment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <strong>{{ $attachment['title'] }}</strong>
                    </td>
                    <td>{{ $attachment['tender_name'] ?? 'N/A' }}</td>
                    <td>
                        <span class="badge badge-secondary">{{ $attachment['procurement_type'] }}</span>
                    </td>
                    <td>
                        <span class="badge badge-success">{{ $attachment['department'] }}</span>
                    </td>
                    <td>{{ $attachment['publish_date'] }}</td>
                    <td>{{ $attachment['close_date'] }}</td>
                    <td>
                        @if($attachment['tender_notice_url'])
                            <a href="{{ $attachment['tender_notice_url'] }}" target="_blank" class="btn btn-sm btn-primary mb-1">
                                <i class="fas fa-file-alt"></i> Notice
                            </a>
                        @endif

                        @if(!$attachment['tender_notice_url'])
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td>
                        @if($attachment['table_handing_url'])
                            <a href="{{ $attachment['table_handing_url'] }}" target="_blank" class="btn btn-sm btn-info">
                                <i class="fas fa-table"></i> Table
                            </a>
                        @endif
                        @if(!$attachment['table_handing_url'])
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
