<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">Query Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Priority</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php 
                                $i = 1;
                            @endphp
                            @foreach($tickets as $ticket)
                          <tr>
                            <th scope="row">{{ $i++}}</th>
                            <td>{{$ticket->query_type}}</td>
                            <td>{{$ticket->name}}</td>
                            <td>{{$ticket->mobile}}</td>
                            <td>{{$ticket->email}}</td>
                            <td>{{$ticket->subject}}</td>
                            <td>{{$ticket->message}}</td>
                            <td>{{$ticket->priority}}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>