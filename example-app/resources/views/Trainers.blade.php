
@extends('layout')
@section('sidebar')
    @parent
     <body class="antialiased">

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Trainers</h1>
      <p class="lead">List of Trainers</p>
      <table class="table">
  <thead>
    <tr>
  <th scope="col">Trainers_id</th>
      <th scope="col">Trainers_name</th>
      <th scope="col">Trainers_email</th>
          <th scope="col">Trainers_phone</th>
           <th scope="col">Company_id</th>
            <th scope="col">Company_name</th>
    </tr>
  </thead>
  <tbody>
     
        @foreach($trainers as $trainer1):
      <tr>
        <th scope="row">{!! $trainer1->trainer_id !!}</th>
         <th scope="row">{!! $trainer1->trainer_name !!}</th>
          <th scope="row">{!! $trainer1->trainer_email !!}</th>
        <th scope="row">{!! $trainer1->trainer_phone !!}</th>
         <th scope="row">{!! $trainer1->company_id !!}</th>
           <th scope="row">{!! $trainer1->companyTrainer['company_name'] !!}</th>
      </tr>
      @endforeach
  
  </tbody>
</table>
    </div>
 {{ $trainers->links() }}
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
</body>
</html>
@endsection
