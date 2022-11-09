function addToModal(formName) {
    const modal = document.getElementById('bootstrapModal');

    modal.dataset.formName = formName;
}

const okk = document.getElementById('ok');
okk.addEventListener('click', function () {
    const modal = document.getElementById('bootstrapModal');
    formName = modal.dataset.formName;

    if (formName) {
        document[formName].submit();
    }

    const bootstrapModal = bootstrap.Modal.getInstance(modal);
    bootstrapModal.hide();
})

$('#bootstrapModal').on('show.bs.modal', function (event) {
    const link = event.relatedTarget;

    const message = link.dataset.confirmMessage;
    console.log(message);

    const confirmMessage = document.getElementById('confirmMessage');
    confirmMessage.textContent = message;
})
