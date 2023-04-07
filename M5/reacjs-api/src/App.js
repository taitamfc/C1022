import { Routes, Route, Link } from "react-router-dom";

import UserIndex from "./pages/users/UserIndex";
import UserShow from "./pages/users/UserShow";
import UserEdit from "./pages/users/UserEdit";
import UserAdd from "./pages/users/UserAdd";
import UserDelete from "./pages/users/UserDelete";
import ArticleIndex from "./pages/articles/ArticleIndex";
import ArticleShow from "./pages/articles/ArticleShow";

function App() {
  return (
    <div className="App">
        <ul>
          <li>
            <Link to="/users">Users</Link>
          </li>
          <li>
            <Link to="/articles">Articles</Link>
          </li>
        </ul>


        <Routes>
          <Route path="/users" element={<UserIndex />} />
          <Route path="/users/{id}/edit" element={<UserEdit />} />
          <Route path="/users/{id}/delete" element={<UserDelete />} />
          <Route path="/users/{id}" element={<UserShow />} />
          <Route path="/users/create" element={<UserAdd />} />

          <Route path="/articles" element={<ArticleIndex />} />
          <Route path="/articles/{id}" element={<ArticleShow />} />
        </Routes>
    </div>
  );
}

export default App;
