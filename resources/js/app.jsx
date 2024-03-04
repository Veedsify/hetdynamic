import React from "react";
import ReactDOM from "react-dom";

const App = () => {
    const [count, setCount] = React.useState(0);
    return (
        <>
            <h1
                onClick={() => {
                    setCount(count + 1);
                }}
            >
                App {count}
            </h1>
        </>
    );
};

ReactDOM.render(
    <>
        <App />
    </>,
    document.getElementById("app")
);
