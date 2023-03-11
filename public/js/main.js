  // バリデーション
window.onload = function () {
  // 苗字
  const lastNameInput = document.getElementById('last_name');
  const lastNameErrorMessage = document.querySelector('.last_name-error-message');
    
  lastNameInput.addEventListener('input', function () {
    if (!lastNameInput.value.trim()) {
      lastNameErrorMessage.textContent = '苗字を入力してください';
    } else {
      lastNameErrorMessage.textContent = '';
  }
  });
  
  // 名前
  const firstNameInput = document.getElementById('first_name');
  const firstNameErrorMessage = document.querySelector('.first_name-error-message');
    
  firstNameInput.addEventListener('input', function () {
    if (!firstNameInput.value.trim()) {
      firstNameErrorMessage.textContent = '名前を入力してください';
    } else {
      firstNameErrorMessage.textContent = '';
    }
  });

  const emailInput = document.getElementById('email');
  const emailErrorMessage = document.querySelector('.email-error-message');
    
  emailInput.addEventListener('input', function () {
    if (!emailInput.value.trim()) {
      emailErrorMessage.textContent = 'メールアドレスを入力してください';
    } else if (!/\S+@\S+\.\S+/.test(emailInput.value.trim())) {
      emailErrorMessage.textContent = 'メールアドレスの形式で入力してください';
    } else {
      emailErrorMessage.textContent = '';
    }
  });
  
  const zip11Input = document.getElementById('zip11');
  const zip11ErrorMessage = document.querySelector('.zip11-error-message');

  zip11Input.addEventListener('input', function () {
    zip11Input.value = zip11Input.value.replace(/[０-９]/g, function(s) {
    return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
  });
  
    if (!zip11Input.value.trim()) {
      zip11ErrorMessage.textContent = '郵便番号を入力してください';
    } else if (!/\d{3}-?\d{4}/.test(zip11Input.value.trim())) {
      zip11ErrorMessage.textContent = 'ハイフンを含む郵便番号形式で入力してください';
    }  else {
      zip11ErrorMessage.textContent = '';
    }
  });
  
  const addr11Input = document.getElementById('addr11');
  const addr11ErrorMessage = document.querySelector('.addr11-error-message');
    
  addr11Input.addEventListener('input', function () {
    if (!addr11Input.value.trim()) {
      addr11ErrorMessage.textContent = '住所を入力してください';
    } else {
      addr11ErrorMessage.textContent = '';
    }
  });
  
  const optionInput = document.getElementById('option');
  const optionErrorMessage = document.querySelector('.option-error-message');

  optionInput.addEventListener('input', function () {
    if (!optionInput.value.trim()) {
      optionErrorMessage.textContent = 'ご意見を入力してください';
    } else if (!/^.{1,120}$/.test(optionInput.value.trim())) {
      optionErrorMessage.textContent = '120文字以内で入力してください';
    } else {
      optionErrorMessage.textContent = '';
    }
  });

  const form = document.querySelector('form');
    
    form.addEventListener('submit', function() {
        lastNameErrorMessage.textContent = '';
        firstNameErrorMessage.textContent = '';
        emailErrorMessage.textContent = '';
        zip11ErrorMessage.textContent = '';
        addr11ErrorMessage.textContent = '';
        optionErrorMessage.textContent = '';
    });
  
}

