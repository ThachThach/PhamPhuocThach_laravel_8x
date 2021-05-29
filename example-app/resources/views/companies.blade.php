@extends('layout')
@section('sidebar')
    @parent
     <body class="antialiased">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Companies</h1>
      <p class="lead">List of Companies</p>
      <table class="table">
  <thead>
    <tr>
  <th scope="col">Company_id</th>
      <th scope="col">Company_name</th>
      <th scope="col">Company_wed</th>
      <th scope="col">Company_address</th>
        <th scope="col">Company_code</th>
          <th scope="col">Company_phone</th>
          <th scope="col">Categories_id</th>
          <th scope="col">Trainer_name</th>
    </tr>
  </thead>
  <tbody>
      
      @foreach($companies as $company):
  
    <tr>
      <th scope="row">{!! $company->company_id !!}</th>
       <th scope="row">{!! $company->company_name !!}</th>
        <th scope="row">{!! $company->company_web !!}</th>
      <th scope="row">{!! $company->company_address !!}</th>
       <th scope="row">{!! $company->company_code !!}</th>
        <th scope="row">{!! $company->company_phone !!}</th>
        <th scope="row">{!! $company->categories_id !!}</th>
         <th scope="row">{!! $company->trainer['trainer_name'] !!}</th>
         
    </tr>
    @endforeach


  </tbody>
</table>
      {{ $companies->links() }}
    </div>


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
