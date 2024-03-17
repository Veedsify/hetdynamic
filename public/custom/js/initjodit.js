// Initialize Jodit Editor
const editor = Jodit.make("#new-article", {
    "uploader": {
        "insertImageAsBase64URI": true
    },
    "placeholder": "Type your article here...",
    "height": "700px",
})
