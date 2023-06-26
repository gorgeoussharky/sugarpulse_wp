document.addEventListener('DOMContentLoaded', () => {
    const displayBtnsForms = document.querySelectorAll('.catalog-type__display-btns')

    displayBtnsForms.forEach((form) => {
        const input = form.querySelector('input[name="view"]')

        const btns = form.querySelectorAll('.catalog-type__toggle-display')

        btns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const { value } = btn.dataset

                if (!value) return

                input.value = value

                form.submit()
            })
        })
    })
})