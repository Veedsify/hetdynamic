import React, { useEffect, useState } from "react";
import "@blocknote/core/fonts/inter.css";
import { BlockNoteView, useCreateBlockNote } from "@blocknote/react";
import "@blocknote/react/style.css";
import { BrowserRouter, useLocation } from "react-router-dom";
import { createRoot } from "react-dom/client";
import { Toaster } from "sonner";
import "./css/style.css";

const App2 = () => {
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    const { pathname } = useLocation();
    let [blocks, setBlocks] = useState([
        {
            type: "paragraph",
            content: "Welcome to this demo!",
        },
    ]);
    const slug = pathname.replace("/blog/", "");

    const editor = useCreateBlockNote({
        disabled: true,
        initialContent: blocks,
    });
    useEffect(() => {
        const getBlocks = async () => {
            const res = await fetch("/blog/block/", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "CSRF-Token": csrfToken,
                },
                body: JSON.stringify({
                    _token: csrfToken,
                    slug: slug,
                }),
            });

            const datablocks = res.ok ? await res.json() : "";
            console.log(JSON.parse(datablocks.blocks));
            setBlocks(JSON.parse(datablocks.blocks));
        };
        getBlocks();
    }, [setBlocks]);

    return <BlockNoteView editor={editor} editable={false} />;
};

createRoot(document.getElementById("app2")).render(
    <BrowserRouter>
        <Toaster richColors position="top-center" />
        <App2 />
    </BrowserRouter>
);
