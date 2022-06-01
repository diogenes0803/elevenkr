import Container from 'react-bootstrap/Container';
import Table from 'react-bootstrap/Table';

function ElevenKTable(props) {

  const listHeaders = props.headers.map((item, index) => <th key={index}>{item}</th>);
  const listItem = (item) => {
    return Object.keys(item).map((key, index) => <td key={index+"-"+key}>{item[key]}</td>);
  }

  const listItems = (items) => {
    return items.map((item, index) => 
      <tr key={index} >
        {listItem(item)}
      </tr>
    ); 
  }

  return (
    <Container>
      <Table responsive striped bordered hover>
        {props.headers != null &&
          <thead>
            <tr key="unique">
              {listHeaders}
            </tr>
          </thead>
        }
        <tbody>
          {listItems(props.items)}
        </tbody>
      </Table>
    </Container>
  );
}

export default ElevenKTable;
