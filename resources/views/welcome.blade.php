<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <title>Home Page</title>
</head>

<body>
  <header>
    <div class="log-out">
      <form action="" method="POST">
        @csrf
        <button type="submit">Log Out</button>
      </form>
    </div>
    <div class="container">
      <div class="hero">
        <h1>Selamat datang di todolist <br>
          @auth
          {{ Auth::user()->name }}
          @else
          Guest
          @endauth 😋👋</h1>
        <p>Jadikan todolist sebagai produktifitas anda</p>
      </div>
    </div>
  </header>
  <div class="container">
    <main>
      <section class="todo-list">
        <div class="tambah-todolist">
          <form action="/todo" method="POST">
            @csrf
            <input type="text" placeholder="Tambahkan todolist" name="title">
            <button type="submit">Tambah</button>
          </form>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @elseif(session()->has('danger'))
        <div class="alert alert-danger">
          {{ session('danger') }}
        </div>
        @endif
        <ul class="todo-items">

          @if($todoLists->count() === 0)
          <h1>Belum Ada TodoList Nich</h1>
          @else
          @foreach ($todoLists as $todo)
          <li class="todo-item">
            <h2>{{ $todo['title'] }}</h2>
            <div class="action">
              <form action="/todo/{{ $todo['id'] }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-delete" onclick="return confirm('Apa Anda Yakin?')">
                  <span class="material-icons-sharp">
                    delete
                  </span>
                </button>
              </form>

            </div>
          </li>
          @endforeach
          @endif

        </ul>
      </section>
    </main>
  </div>
  <footer>
    <div class="container">
      <p>Created by <a href="">Febrian Andy</a>
    </div>
  </footer>
</body>

</html>