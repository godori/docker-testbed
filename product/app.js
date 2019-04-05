const express = require("express");
const app = express();
const PORT = 80;

app.get("/", (req, res) => {
  res.send("hello world~~");
});

app.get("/product", (req, res) => {
  res.send({ items: ["ice cream", "chocolate", "fruit"] });
});

app.listen(PORT, () => {
  console.log(`istenling to port...${PORT} -> http://localhost:${PORT}`);
});
