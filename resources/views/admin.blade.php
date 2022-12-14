<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>page admin</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-success p-4">
            <div class="d-flex flex-column">
                <img src= "{{asset('storage/images/' )}}" class="img-responsive" height="100" width="100" alt="photo">
                 <span class="text-light h3">matricule</span>
            </div>&nbsp;&nbsp;&nbsp;
            <div class="me-5 d-flex flex-row">
                <span class="text-light h3">prenom</span>&nbsp;&nbsp;

                <span class="text-light h3">nom</span>&nbsp;
            </div>
            

            <div class="d-flex justify-content-center m-3 navbar-nav me-auto mb-lg-0">
                <a class="nav-link active text-light m-2" aria-current="page" href="/api/listearchive" ><button type="button" class="btn btn-outline-success ">
                        <img src="/image/dearchiv.png" > Liste des archivés

                    </button></a>
            </div>
            <form class="d-flex" role="search" action="recherche" method="post">
                <input class="form-control me-2" name="prenom" type="search" placeholder="rechercher par prenom" aria-label="Search">
                <button class="btn btn-outline-light p-1" onchange="" type="submit">rechercher</button>
               {{--  <ul class="nav-item ">

                           <a href="">
                           <button type="button" class="btn btn-outline-danger mt-3 p-1 "><img src="/image/quit.png" alt="quitter" width="30"></button>
                       </a>


                </ul> --}}
            </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/login">
                <button type="button" class="btn btn-outline-success "><img src="/image/deconect.png" alt="deconnecter">Deconnecter</button>
            </a>
        </nav>


    </header>
    <main>
        <div class="m-5">
        <table class="table caption-top border border-dark">
        <thead class="table-success">
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">Matricule</th>
      <th scope="col">Photo</th>
      <th scope="col">Role</th>
      <th scope="col">ACTION</th>
      {{-- <th scope="col">Etat</th> --}}
    {{--   <th scope="col">Pass</th> --}}
    </tr>
  </thead>

  <tbody>

  @foreach ($users as $user)
    <tr>

      <td cope="row">{{{ $user->nom }}}</td>
      <td>{{{ $user->prenom }}}</td>
      <td>{{{ $user->email }}}</td>
       <td>{{{ $user->matricule }}}</td>
       <td>{{{ $user->photo }}}</td>
      <td>{{{ $user->role }}}</td>
     {{--  <td>{{{ $user->etat }}}</td> --}}
     {{--  <td>{{{ $user->motdepasse }}}</td> --}}




      <td><a href="/api/posts/switchRole/{{$user->id}}?post"><img src="/image/change.png" alt=""></a>
    {{--   <td><a href="/api/posts/switchRole/{{$user->id}}?post"><img src="/image/change.png" alt="changer"></a> --}}
        {{-- <form action="/api/posts/switchRole/{{$user->id}}" method="post">
        <button type="submit"><img src="/image/change.png" alt=""></button>
    </form> --}}
        <a href="/api/posts/archiv/{{$user->id}}"><img src="/image/archiv.png" alt="archiver"></a>
        <a href="posts/editForm/{{$user->id}}"><img src="/image/edit.png" alt="modifier"></a>
       {{--  <a href="/api/posts/switchRole/{{$user->id}}?post"><img src="/image/edit.png" alt=""></a> --}}
  </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{-- <nav aria-label="...">
    <ul class="pagination d-flex justify-content-center">
         {{$users->links()}}
    </ul>


</nav> --}}


{{--  <nav aria-label="...">
    <ul class="pagination fixed-bottom justify-content-center">
      <li class="page-item disabled">
        <a class="page-link"><img src="/image/precedent.png" alt="" width="30" height="20"></a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#"><img src="/image/suivant.png" alt="" width="30" height="20"></a>
      </li>
    </ul>
  </nav> --}}
</div>
</main>
</body>
</html>

