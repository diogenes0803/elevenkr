import Navbar from 'react-bootstrap/Navbar';
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import { Link }  from 'react-router-dom';

function NavBar() {
  return (
    <Navbar bg="light" expand="lg">
      <Container>
        <Navbar.Brand href="#">11KR 실시간 현황</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto">
            <Nav.Link as={Link} to="/online">온라인현황</Nav.Link>
            <Nav.Link as={Link} to="/match">매치현황</Nav.Link>
            <Nav.Link as={Link} to="/rank">랭크현황</Nav.Link>
            <Nav.Link as={Link} to="/blacklist">비매너유저</Nav.Link>
            <a className="nav-link" href="https://www.youtube.com/channel/UCJoLd_ZI6Vh_hfZesrsrOBw" target="_blank">Youtube</a>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
}

export default NavBar;
