<form method="post" action="{{ url(action('BuzzerController@update', $buzzer->id)) }}">
    {{ csrf_field() }}
          Nama Buzzer<input type="text" name="nama_buzzer" value="{{$buzzer->nama_buzzer}}"  />
          Telepon Buzzer<input type="text" name="phone"    value="{{$buzzer->phone}}"     />
          <button type="submit" class="btn btn-primary btn-block btn-sm">Submit</button>
</form>
