 
    @include('layouts.app')
    @if($layout == 'index')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include ("student-list")
            </section>
            <section class="col-md-0"></section>
        </div>
    </div>
  
      @elseif($layout == 'show')
    <div class="container-fluid">
    <div class="row d-flex justify-content-center">
            <section class="col">
                @include ("student-list")
                  </section>     
        </div>
    </div>
    @endif