@extends('layouts.main')

@section('content')

   <div class=" justify-content-center text-center">
    <div class=" btn btn-success">
       <a href="{{ route('list-product.show') }}" class="btn btn-success"><h5>Halaman Pengguna Admin</h5></a>
    </div>


            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        
                        <th>Nama Akun</th>
                        <th>Email</th>
                        <th>gender</th>
                        <th>age</th>
                        <th>birth</th>
                        <th>address</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr >
                            
                            <td >{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}25 tahun</td>
                             <td> {{ $user->gender }}pria</td>
                            <td>{{ $user->birth }}12-12-1951</td>
                            <td>{{ $user->address}}jl.kenangan bersama kamu</td>
                           {{--  <td style="width: 15%;">
                                <div>
                                    <a href="{{ route('product.edit', $user->id) }}" class="btn btn-warning">Update</a>
                                    <form action="{{ route('product.destroy', $user->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>  --}}

                        </tr>
                        @php
                            $nomor++;
                        @endphp
                    @endforeach
                </tbody>
            </table>

        </div>
     </div>
   </div>

@endsection
