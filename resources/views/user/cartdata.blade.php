<table class="table-bordered" id="data" class="text-center">
    <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Qty</th>
        <th>Subtotal</th>
        <th>Action</th>
    </tr>
    @php
        $total = 0;
    @endphp
    @foreach ($cart as $key => $val)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$val->buku->judul_buku}}</td>
            <td>{{$val->qty}}</td>
            <td>Rp. {{number_format($val->subtotal,2)}}</td>
            <td><button class="btn btn-outline-danger" value="{{$val->id}}">Delete</button></td>
        </tr>
        @php
            $total += $val->subtotal;
        @endphp
    @endforeach
</table>
<p>Total semuanya adalah : Rp. {{number_format($total,2)}}</p>