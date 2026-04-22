function fakeSubmit(e){
    e.preventDefault();
    const el = document.getElementById('formStatus');
    if (el) el.textContent = "Message prêt (formulaire front). Si tu veux, je te branche l'envoi réel via Laravel Mail.";
    return false;
}
