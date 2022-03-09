@component('mail::message')
<p>Hallo, {{$register->user->name}}</p>
<p> Terimakasih telah melakukan pendaftaran dalam kegiatan kami
    silakan buka link ini untuk melakukan upload pembayaran anda
</p>
<p>kode pendaftara : {{$register->activity->kode_activity}}</p>
<p>Jumlah Tiket : {{$register->qty}}</p>
<p>Total pembayaran : {{$register->qty * $register->activity->idr}}</p>
@component('mail::button', ['url' => "http://localhost/activity/public/user/ambil-form/{$register->id}"])
    Upload Pembayaran
@endcomponent

@endcomponent