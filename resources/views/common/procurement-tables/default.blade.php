<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 40%;">Title</th>
                <th style="width: 15%;">Department</th>
                <th style="width: 15%;">Date</th>
                <th style="width: 25%;">Download</th>
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
                        <span class="badge badge-info">{{ $attachment['department'] }}</span>
                    </td>
                    <td>{{ $attachment['formatted_date'] }}</td>
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
