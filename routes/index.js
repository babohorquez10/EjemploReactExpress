var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/data', function(req, res, next) {
  const tweets = [
    {id:1, text:"Aaa", user:{screen_name: "A"} },
    {id:2, text:"Bbb", user:{screen_name: "B"} },
    {id:3, text:"Ccc", user:{screen_name: "C"} },
    {id:4, text:"Ddd", user:{screen_name: "D"} }
  ];

  res.json(tweets);
});

module.exports = router;
