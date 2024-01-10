@extends('layouts.front')

@push('css')
    
@endpush

@section('content')


<div class='max-page-width' id='pages'>
    <div id='donations'>
      <div class='pages-top-section'>
        <div class='splash'>
          <div class='cover' style='padding-top: 56.25%; background-image: url(/assets/static/donations-1x-7bea400b9bb4f5d941cc9ed8fffffa0aabf2c82e713391a002147cb6c2927c0f.jpg); background-repeat: no-repeat; background-size: cover;'></div>
          <div class='dark-overlay'></div>
          <img class="wave-pattern" src="/assets/pages-wave-splash-7799b28d474ad16954d4e2bad145c9bd801823bfd813ed18604e5917ae9328aa.svg" />
          <div class='text-overlay'>
            <div class='title'> Donations </div>
          </div>
        </div>
        <div class='content'>
          {{-- stripe donate form  --}}
          <form action="{{ route('stripe.charge') }}" method="post">
            @csrf

            <div class="form-group">
              <label for="name">Amount</label>
              <input type="text" name="amount" placeholder="Enter Name" class="form-control" required>
            </div>

            {{-- button  --}}
            <button type="submit" class="btn btn-primary">Donate</button>
          </form>
          
        </div>
      </div>
    </div>
    <img src="/assets/take-a-tour-bottom-wave-adb6608561f97c67fbb56d16f6b8b5301c8d7943ca68a57da571a8e1d9860270.svg" />
  </div>
    
@endsection

@push('js')