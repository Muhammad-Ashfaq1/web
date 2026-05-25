<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 10%;">Department</th>
                <th style="width: 25%;">Procurement Name</th>
                <th style="width: 10%;">Publish Date</th>
                <th style="width: 10%;">Close Date</th>
                <th style="width: 20%;">Lowest Firm</th>
                <th style="width: 10%;">Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attachments as $index => $attachment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <span class="badge badge-success">{{ $attachment['department'] }}</span>
                    </td>
                    <td>
                        <strong>{{ $attachment['title'] }}</strong>
                        @if($attachment['procurement_name'])
                            <br><small class="text-muted">{{ $attachment['procurement_name'] }}</small>
                        @endif
                    </td>
                    <td>{{ $attachment['publish_date'] }}</td>
                    <td>{{ $attachment['close_date'] }}</td>
                    <td>
                        <span class="badge badge-warning">{{ $attachment['first_lowest_firm_name'] ?? 'N/A' }}</span>
                    </td>
                    <td>
                        @if($attachment['attachment_url'])
                            <a href="{{ $attachment['attachment_url'] }}" target="_blank" class="btn btn-sm btn-primary">
                                <i class="fas fa-file-chart-line"></i> Report
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
