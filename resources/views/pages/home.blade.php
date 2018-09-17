@extends('layouts.main')

@section('head')
    <title>Home</title>
@endsection

@section('script')
    app = new Vue({
        el: '#app',
        data: {
            foo: 'bar'
        } 
    });
@endsection

@section('body')

<div id="app">
    <div v-text="foo"></div>
</div>

<button class="btn" onclick="
  axios.post('{{ url('/') }}/axios', {
      foo: 'bar'
  })
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.log(error);
  });
  
">post</button>

@endsection