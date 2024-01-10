@extends('layouts.front')



@section('content')
<style>
    .center {
      text-align: center;
    }
    
    .pagination {
      display: inline-block;
    }
    
    .pagination a {
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
      border: 1px solid #ddd;
      margin: 0 4px;
    }
    
    .pagination a.active {
      background-color: #4CAF50;
      color: white;
      border: 1px solid #4CAF50;
    }
    
    .pagination a:hover:not(.active) {background-color: #ddd;}
    </style>

<body id='targets-index' onload='$(&#39;body&#39;).trigger(&#39;loaded&#39;);'>
    <div class='page-background'>

        <div class='no-print' id='header-spacer'></div>
    {{-- navigation Menu  --}}
    @include('partials.navbar')

<div class='target' id='target-articles'>
    <div class='page-header'>
        <div class='page-title'>
            LSB Version Bible
        </div>
    </div>
    <div class='page-header'>
        <div class='page-title'>
            Genesis-{{ $id }}
        </div>
    </div>
    <div id='latest-target-articles'>
       
        <div class="center">
            <div class="pagination">
            <a href="#">&laquo;</a>
            <a class="common active" id="first" href="#">1</a>
            <a class="common" id="second" href="#">2</a>
            <a class="common" id="last" href="#">3</a>
            <a class="common" id="second" href="#">4</a>
            <a class="common" id="last" href="#">5</a>
            <a class="common" id="second" href="#">6</a>
            <a class="common" id="last" href="#">7</a>

            
            <a href="#">&raquo;</a>
            </div>
          </div>

          {{-- .all bible Texts show as list  --}}
          <div class="content">
            @foreach ($bibles as $item)
            <div class="text-center" >
                <div class="class" style="display: inline-block; margin-bottom:10px">
                    <span> {{ $loop->iteration }}. {{ $item->text }}</span>
                </div>
            </div>
            @endforeach

          </div>
         
          <span></span>


       
      

    </div> 
</div>


@include('partials.footer')


</div>
<script>



    // ajax call to get bible texts
    $(document).ready(function(){
       $('.common').click(function(){
        $('.common').removeClass('active');
        $(this).addClass('active');
        // javascript loop count 
        var count = 1;
        
       
        var run = parseInt($(this).html());
        var url = "{{ route('bible',':id') }}"
        $.ajax({
            url: url.replace(':id',run),
            type: "GET",
            dataType: "json",
            success: function(data){
                var html = '';
                $.each(data, function(key, value){
                    html += '<div class="text-center" >';
                    html += '<div class="class" style="display: inline-block; margin-bottom:10px">';
                    html += '<span> '+ count++ +'. '+ value.text +'</span>';
                    html += '</div>';
                    html += '</div>';
                });

                $('.page-title').html('');
                $('.page-title').html('Genesis-'+run);
                
                $('.content').html(html);
            }
        });
       });
    });


  </script>

@stack('js')
</body>


@endsection