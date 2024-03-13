<script>
    document.addEventListener('DOMContentLoaded', function() {
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
    });

    document.addEventListener('DOMContentLoaded', function() {
        const passwordConfirmInput = document.getElementById('password-confirm');
        const showPasswordConfirmBtn = document.getElementById('ShowPasswordConfirm');
        const hidePasswordConfirmBtn = document.getElementById('HidePasswordConfirm');

        showPasswordConfirmBtn.addEventListener('click', function() {
            passwordConfirmInput.setAttribute('type', 'text');
            showPasswordConfirmBtn.style.display = 'none';
            hidePasswordConfirmBtn.style.display = 'inline-block';
        });

        hidePasswordConfirmBtn.addEventListener('click', function() {
            passwordConfirmInput.setAttribute('type', 'password');
            hidePasswordConfirmBtn.style.display = 'none';
            showPasswordConfirmBtn.style.display = 'inline-block';
        });
    });

</script>
