<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
  <title>EstateAgency Bootstrap Template - Index</title>
    @include('layouts.includes.favi-css')
 
</head>

<body>
@include('layouts.includes.navigation')
@include('layouts.includes.intro')
 
  <main id="main">

  @include('layouts.includes.service')
   
  @include('layouts.includes.latestprop')
 

  @include('layouts.includes.agents')
 
  @include('layouts.includes.latestnews')

  @include('layouts.includes.test')

  </main><!-- End #main -->

 
  @include('layouts.includes.footer')

 
</body>

</html>