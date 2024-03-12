{{-- login --}}
<script>
    document.getElementById('ShowPassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
        passwordInput.setAttribute('type', 'text');
        document.getElementById('ShowPassword').style.display = 'none';
        document.getElementById('HidePassword').style.display = 'inline-block';
    });

    document.getElementById('HidePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
        passwordInput.setAttribute('type', 'password');
        document.getElementById('HidePassword').style.display = 'none';
        document.getElementById('ShowPassword').style.display = 'inline-block';
    });
</script>