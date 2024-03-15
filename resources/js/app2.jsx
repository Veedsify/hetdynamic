import React from "react";
import "@blocknote/core/fonts/inter.css";
import { BlockNoteView, useCreateBlockNote } from "@blocknote/react";
import "@blocknote/react/style.css";
import { BrowserRouter } from "react-router-dom";
import { createRoot } from "react-dom/client";

const App2 = () => {
    const editor = useCreateBlockNote({
        initialContent: [
            {
                type: "paragraph",
                content: "Welcome to this demo!",
            },
            {
                type: "paragraph",
            },
            {
                type: "paragraph",
                content: [
                    {
                        type: "text",
                        text: "Blocks:",
                        styles: { bold: true },
                    },
                ],
            },
            {
                type: "paragraph",
                content: "Paragraph",
            },
            {
                type: "heading",
                content: "Heading",
            },
            {
                type: "bulletListItem",
                content: "Bullet List Item",
            },
            {
                type: "numberedListItem",
                content: "Numbered List Item",
            },
            {
                type: "image",
            },
            {
                type: "table",
                content: {
                    type: "tableContent",
                    rows: [
                        {
                            cells: ["Table Cell", "Table Cell", "Table Cell"],
                        },
                        {
                            cells: ["Table Cell", "Table Cell", "Table Cell"],
                        },
                        {
                            cells: ["Table Cell", "Table Cell", "Table Cell"],
                        },
                    ],
                },
            },
            {
                type: "paragraph",
            },
            {
                type: "paragraph",
                content: [
                    {
                        type: "text",
                        text: "Inline Content:",
                        styles: { bold: true },
                    },
                ],
            },
            {
                type: "paragraph",
                content: [
                    {
                        type: "text",
                        text: "Styled Text",
                        styles: {
                            bold: true,
                            italic: true,
                            textColor: "red",
                            backgroundColor: "blue",
                        },
                    },
                    {
                        type: "text",
                        text: " ",
                        styles: {},
                    },
                    {
                        type: "link",
                        content: "Link",
                        href: "https://www.blocknotejs.org",
                    },
                ],
            },
            {
                type: "paragraph",
            },
        ],
    });
    return (
        <BlockNoteView
            onChange={editorChange}
            editor={editor}
            className="editor_content"
        />
    );
};

createRoot(document.getElementById("app2")).render(
    <BrowserRouter>
        <Toaster richColors position="top-center" />
        <App2 />
    </BrowserRouter>
);
