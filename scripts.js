// JavaScript для управления всплывающим окном
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];
var modalContent = document.querySelector(".modal-content");

btn.onclick = function() {
    modal.style.display = "block";
    setTimeout(function() {
        modal.classList.add("show");
        modalContent.classList.add("show");
    }, 10);
}

span.onclick = function() {
    modal.classList.remove("show");
    modalContent.classList.remove("show");
    setTimeout(function() {
        modal.style.display = "none";
    }, 300);
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.classList.remove("show");
        modalContent.classList.remove("show");
        setTimeout(function() {
            modal.style.display = "none";
        }, 300);
    }
}

// JavaScript для отправки формы с использованием AJAX
document.getElementById("contactForm").onsubmit = function(event) {
    event.preventDefault();

    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_form.php", true);

    xhr.onload = function () {
        var responseMessage = document.getElementById("responseMessage");
    
        if (xhr.status === 200) {
            responseMessage.innerText = xhr.responseText;
            
            if (xhr.responseText === "Сообщение успешно отправлено!") {
                responseMessage.style.color = "#00b33c";
                
                // Закрытие формы через 2 секунды
                setTimeout(function() {
                    modal.classList.remove("show");
                    modalContent.classList.remove("show");
                    setTimeout(function() {
                        modal.style.display = "none";
                    }, 300);
                }, 1000);
            } else {
                responseMessage.style.color = "";
            }
        } else {
            responseMessage.innerText = "Ошибка при отправке формы.";
            responseMessage.style.color = "red"; // или другой цвет для ошибок
        }
    };

    xhr.send(formData);
};