window.addEventListener('load', function () {
    init()
})

function init() {

    const form = document.getElementById('form')

    form.addEventListener('submit', function (e) {
        e.preventDefault()

        sendData(this)

    })

    function sendData(_this) {

        const data = new FormData(_this)

        fetch('https://dimianni.com/form/sendEmail.php', {
            method: 'POST',
            body: data
        })
            .then(res => {
                console.log(res);
                res.text()
            })
            .then(data => {
                console.log(data);
            })
            .catch(err => console.log("Error:", err))
    }

}