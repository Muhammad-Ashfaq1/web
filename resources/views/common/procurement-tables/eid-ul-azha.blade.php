<div class="responsive-table">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: 40%;">Procurement Name</th>
                <th style="width: 25%;">Bid Documents</th>
                <th style="width: 25%;">Purchase Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attachments as $index => $attachment)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <strong>{{ $attachment['title'] }}</strong>
                        <br>
                        <small class="text-muted">Eid-ul-Azha Procurement</small>
                    </td>
                    <td>
                        @if($attachment['attachment_url'])
                            <a href="{{ $attachment['attachment_url'] }}" target="_blank" class="btn btn-sm btn-primary mb-1">
                                <i class="fas fa-file-pdf"></i> Attachment
                            </a>
                        @endif

                        @if(!$attachment['attachment_url'])
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td>
                        @if($attachment['purchase_order_url'])
                            <a href="{{ $attachment['purchase_order_url'] }}" target="_blank" class="btn btn-sm btn-success">
                                <i class="fas fa-shopping-cart"></i> Purchase Order
                            </a>
                        @endif
                         @if(!$attachment['purchase_order_url'])
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
