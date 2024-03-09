import React from "react";
import { createRoot } from "react-dom/client";
import { useState } from "react";
import "./css/style.css";
import Editor from "./components/editor";
import axios from "axios";

const App = () => {
    const [image, setImage] = useState("/custom/upload.svg");
    const [categories, setCategories] = useState([]);

    const handleImageChange = (e) => {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onloadend = () => {
            setImage(reader.result);
        };
        reader.readAsDataURL(file);
    };

    React.useEffect(() => {
        const getAllCategories = async () => {
            const response = await axios.post("/api/categories"); // Fetch categories
            setCategories(response.data.categories); // Set categories
        };
        getAllCategories(); // Call the function to fetch categories
    }, [setCategories]);
    return (
        <>
            <div className="screen">
                <div className="">
                    <label htmlFor="title">Title</label>
                    <input
                        type="text"
                        id="title"
                        className="form-input input-border"
                    />

                    <div>
                        <label htmlFor="tags">Tags *(Comma Seperated)</label>
                        <input
                            type="text"
                            id="tags"
                            className="form-input input-border "
                        />
                    </div>
                    <div>
                        <label htmlFor="category">Category</label>
                        <select
                            type="text"
                            id="category"
                            className="form-input input-border"
                        >
                            <option value="1" disabled defaultValue="1">
                                (-- SELECT --)
                            </option>
                            {categories &&
                                categories.map((category, index) => {
                                    return (
                                        <option
                                            value={category.name}
                                            key={index}
                                        >
                                            {category.name}
                                        </option>
                                    );
                                })}
                        </select>
                    </div>
                    <div>
                        <label htmlFor="description">Description</label>
                        <textarea
                            type="text"
                            id="description"
                            rows={10}
                            className="form-input input-border "
                        ></textarea>
                    </div>
                </div>
                <label htmlFor="">Content:</label>
                <div className="editor_container">
                    <Editor />
                </div>
                <label htmlFor="featured_image" id="file_upload_label">
                    <p>Featured Image</p>
                    <input
                        onChange={handleImageChange}
                        type="file"
                        className="form-input hidden"
                        id="featured_image"
                    />
                    <div className="image-center">
                        <img src={image} alt="" width="500" />
                    </div>
                </label>
            </div>
        </>
    );
};

createRoot(document.getElementById("app")).render(
    <>
        <App />
    </>
);
