window.addEventListener('load', () => {
    let iconPassword = document.querySelectorAll('.show-password')
    if(iconPassword != null) {
        iconPassword.forEach((each) => {
            each.addEventListener('click', () => {
                let parent = each.parentNode.querySelector('input')
                if(parent.getAttribute('type') === "text") {
                    parent.setAttribute('type', 'password')
                } else {
                    parent.setAttribute('type', 'text')
                }
            })
        })
    }
})
