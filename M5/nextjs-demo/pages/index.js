import axios from "axios";
/*
Dựa vào tài liệu này:
https://caodem.com/codex/codex-javascript/tao-hop-thoi-tiet-bang-api-openweathermap-code-javascript/
*/
// Controller
//Phương thức getStaticProps có thể được sử dụng bên trong một Page để lấy dữ liệu ngay tại thời điểm xây dựng
export async function getStaticProps(context) {
  let city = 'Quang tri';
  let apiKey = '062d92a2646152d39eb7845a608226cb';
  let api_url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&lang=vi&units=metric&appid=${apiKey}`;
  const resp = await axios.get(api_url);
  console.log(resp.data);
  return {
    props: resp.data
  }
}
//Phương thức này lấy dữ liệu mỗi khi user gửi request lên hệ thống
/*
export async function getServerSideProps(context) {
  return {
    props: {
      // Giá trị props cho component của bạn
    },
  };
}
*/
// View
function index(props) {
  const { name } = props;
  const { icon, description } = props.weather[0];
  const { temp, humidity } = props.main;
  const { speed } = props.wind;
  const { country } = props.sys;

  const handleClick = () => {
    alert('handleClick')
  }

  return (
    <div>
      <div className="thoitiet">
        {/* <div className="searchtiet" style={{ display: "flex", marginBottom: 20 }}>
          <input
            type="text"
            className="search-bar"
            id="otiet"
            placeholder="Tìm kiếm địa điểm"
          />
          <button id="timtiet" onClick={handleClick}>Tìm</button>
        </div> */}
        <div className="weather loading">
          <div className="city"> {name} , {country} </div>
          <div className="temp">{temp} °C</div>
          <img
            className="may"
            src={"https://openweathermap.org/img/wn/" + icon + ".png"}
            alt=""
          />
          <div className="description">{description}</div>
          <div>
            <span className="humidity"> Độ ẩm {humidity} </span>
          </div>
          <div>
            <span className="wind">Gió:  {speed} km/h </span>
          </div>
        </div>
      </div>
      {/* <Footer /> */}
    </div>
  );
}
export default index;