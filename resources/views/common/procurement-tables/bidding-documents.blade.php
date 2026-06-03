<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 15%;">Department</th>
                <th style="width: 15%;">Last Date</th>
                <th style="width: 15%;">Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attachments as $index => $attachment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <strong>{{ $attachment['title'] }}</strong>
                    </td>
                    <td>
                        @if($attachment['last_date'] !== 'N/A')
                            <span class="text-danger font-weight-bold">{{ $attachment['last_date'] }}</span>
                        @else
                            <span class="text-muted">{{ $attachment['last_date'] }}</span>
                        @endif
                    </td>
                    <td>
                        @if($attachment['attachment_url'])
                            <a href="{{ $attachment['attachment_url'] }}" target="_blank" class="btn btn-sm btn-primary">
                                <i class="fas fa-download"></i> Download
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
