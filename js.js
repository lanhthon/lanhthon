var nhacnen = document.getElementById("myAudio"); 
nhacnen.play();
var name = document.getElementById("name").value


  

  
  



var loibaihat = ["<b>Far From You<br>Song by Arild Aas, Martin, Miller and WildVibes","When you feel you're missing out<br><b>Có khi nào "+name+" cảm thấy thật thiếu vắng",
"On the things in life",
"On the things in life<br><b>Về một thứ gì đó trên đời chưa",
"And when I'm so far from you<br><b>Khi hai ta đang cánh nhau thật xa",
"Everything seems so dark<br><b>Mọi thứ trên đời trở nên thật tăm tối",
"But I remember you gave me a mark<br><b>Nhưng tôi vẫn nhớ dấu ấn mà "+name+" để lại cho tôi",
"Yeah yeah yeah, oh oh oh",
"Everything seems so dark<br><b>Mọi thứ trên đời trở nên thật tăm tối",
"When I'm far, far from you<br><b>khi rời xa "+name+"",
"Yeah yeah yeah, oh oh oh",
"Everything seems so dark<br><b>Mọi thứ trên đời trở nên thật tăm tối",
"When I'm far, far from you<br><b>khi rời xa "+name+"",
"If you should ever feel lonely<br><b>Nếu "+name+" từng trải qua nỗi cô đơn",
"Just know I'm there by your side<br><b>Hãy nhớ rằng có tôi luôn ở bên "+name+" đây",
"There is no need to hide<br><b>"+name+" đừng giấu làm gì",
"Although I'm so far from you<br><b>Dẫu rằng tôi và "+name+" có xa cách muôn trùng",
"We won't let this come in between<br><b>Khoảng cách cũng chẳng thể cắt đứt được đôi ta",
"'Cause you're the best I've ever seen, oh<br><b>Bởi với tôi, "+name+" là điều tuyệt vời nhất trên đời này ",
"Yeah yeah yeah, oh oh oh",
"Everything seems so dark<br><b>Mọi thứ trên đời trở nên thật tăm tối",
"When I'm far, far from you<br><b>khi rời xa "+name+"",
"Yeah yeah yeah, oh oh oh",
"Everything seems so dark",
"When I'm far, far from you"]
;
var luot = 0;
var gio = [00,18740, 22800, 26580, 33050, 36860, 40250, 49220, 56070, 59240, 63840, 70850, 74310, 123080, 127650, 130970, 138200, 142230, 145720, 154540, 161440, 164670, 169370, 176390, 179770];
var i = 1;
for (let time of gio)
{
setTimeout(function (){
document.getElementById("quote").innerHTML = loibaihat[luot++];
},gio[i++]); 
};



  

  

function thongbaopopup(){
 
   
document.getElementById("tbpopup-1").classList.toggle("active");
}



