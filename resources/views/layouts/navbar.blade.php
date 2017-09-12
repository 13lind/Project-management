<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }

        li {
            display: inline;
        }
    </style>
</head>

<body>
    <ul>
    @if (Auth::guest())
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
    @else
    <a href="{{ route('logout') }}" 
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
          Logout
    </a>
    @endif
    </ul>
</body>

