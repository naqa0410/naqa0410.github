document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;

        if (name.trim() === '' || phone.trim() === '') {
            e.preventDefault();
            alert('Please fill out all required fields.');
        }
    });
});
