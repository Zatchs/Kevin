/*const personnes = document.getElementById('personnes');

if (personnes) {
    personnes.addEventListener('click', e => {
        if(e.target.className === 'delete-personne') {
            if(confirm('Voulez-vous vraiment supprimer cet utilisateur?')) {
                const id = e.target.getAttribute('data-id');

                fetch(`/liste/${id}`, {
                    methods: 'DELETE'
                }).then(res => window.location.reload());
            }
        }
    });
}*/