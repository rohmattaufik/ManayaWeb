<form method="post" action="{{ url(action('BuzzerController@store')) }}">
    {{ csrf_field() }}
          Nama Buzzer<input type="text" name="nama_buzzer"  />
          Telepon Buzzer<input type="text" name="phone"         />
          <button type="submit" class="btn btn-primary btn-block btn-sm">Submit</button>
</form>

<table class="table m-0">
    <thead>
        <th scope="col">#</th>
        <th scope="col">Nama Buzzer</th>
        <th scope="col">Phone</th>
    </thead>
    <tbody>
      <?php $count = 0; ?>
        @foreach($buzzers as $buzzer)
          <tr>
              <td><?php echo ++$count; ?></td>
              <td>{{$buzzer->nama_buzzer}} </td>
              <td>{{$buzzer->phone}}</td>
              <td>
                  <a type="button" href="{{ url(action('BuzzerController@edit',[$buzzer->id])) }}"
                     class="btn btn-primary btn-sm">
                      Edit
                  </a>
                  <form method="post" action="{{ url(action('BuzzerController@delete')) }}">
                      {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$buzzer->id}}" />
                            <button type="submit" class="btn btn-primary btn-block btn-sm">Delete</button>
                  </form>
              </td>
          </tr>
        @endforeach
    </tbody>
</table>
