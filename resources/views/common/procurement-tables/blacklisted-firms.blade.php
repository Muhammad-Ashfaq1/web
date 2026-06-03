<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 20%;">Firm Name</th>
                <th style="width: 25%;">Blacklist Reason</th>
                <th style="width: 10%;">Department</th>
                <th style="width: 10%;">Type</th>
                <th style="width: 10%;">Blacklist Date</th>
                <th style="width: 10%;">End Date</th>
                <th style="width: 10%;">Remarks</th>
                <th style="width: 10%;">Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attachments as $index => $attachment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <strong class="text-danger">{{ $attachment['title'] }}</strong>
                    </td>
                    <td>
                        <small>{{ $attachment['blacklist_reason'] ?? 'N/A' }}</small>
                    </td>
                    <td>
                        <span class="badge badge-danger text-muted">{{ $attachment['department'] }}</span>
                    </td>
                    <td>
                        @if($attachment['blacklist_type'] === 'Permanent')
                            <span class="badge badge-danger text-muted">{{ $attachment['blacklist_type'] }}</span>
                        @else
                            <span class="badge badge-warning text-danger">{{ $attachment['blacklist_type'] }}</span>
                        @endif
                    </td>
                    <td>{{ $attachment['blacklist_date'] }}</td>
                    <td>
                        @if($attachment['blacklist_end_date'] === 'Permanent')
                            <span class="text-danger font-weight-bold">Permanent</span>
                        @else
                            {{ $attachment['blacklist_end_date'] }}
                        @endif
                    </td>
                    <td>
                        <small>{{ $attachment['blacklist_remarks'] }}</small>
                    </td>
                    <td>
                        @if($attachment['blacklist_order_attachment_url'])
                            <a href="{{ $attachment['blacklist_order_attachment_url'] }}" target="_blank" class="btn btn-sm btn-danger">
                                <i class="fas fa-gavel"></i> Order
                            </a>
                        @else
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
