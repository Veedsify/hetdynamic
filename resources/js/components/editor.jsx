import "@blocknote/core/fonts/inter.css";
import { BlockNoteView, useCreateBlockNote } from "@blocknote/react";
import "@blocknote/react/style.css";

const Editor = () => {
    const editor = useCreateBlockNote({
        uploadFile: async (file) => {
            const formData = new FormData();
            formData.append("file", file);
            const response = await fetch("/api/image-upload", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.head.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
            });
            const data = await response.json();
            return data.url;
        },
    });
    return <BlockNoteView editor={editor} className="editor_content"/>;
};

export default Editor;
