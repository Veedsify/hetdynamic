// Initialize Jodit Editor
const newArticle = document.getElementById('new-article');
let JoditEditor;
if (newArticle) {
     JoditEditor = Jodit.make("#new-article", {
        "uploader": {
            "insertImageAsBase64URI": true
        },
        "placeholder": "Type your article here...",
        "height": "700px",
    })
}

