@extends('layouts.main')

@section('content')

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Questions</h5>
              
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>ame
                    </th>
                    <th>Question.</th>
                    <th>Answer</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($questions as $question)
                  <tr>
                    <td>{{ $question->id}}</td>
                    <td>{{ $question->question}}</td>
                    <td>{{ $question->answer}}</td>                 
                  </tr>
                  @endforeach     
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

    
@endsection