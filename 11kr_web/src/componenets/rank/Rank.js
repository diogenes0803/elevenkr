import Container from 'react-bootstrap/Container';
import ElevenKTable from '../commons/ElevenKTable';
import { useState, useEffect } from 'react';
import { getRanks } from '../../lib/ElevenKClient';

const headers = ['순위', '닉네임', 'ELO', '랭크', '승리', '패배'];

function Rank () {
  const [ data, setData] = useState([]);
  const makeLink = (context, id) => {
    return <a target='_blank' rel="noreferrer" href={`https://elevenvr.net/eleven/${id}`}>{context}</a>
  }
  const updateData = () => {
    getRanks().then( res => {
      res.json().then( jsonRes => {
        jsonRes.forEach( (obj) => {
          obj.user_name = makeLink(obj.user_name, obj.user_id);
          delete obj.user_id;
        })
        setData(jsonRes);
      })
    })
  }
  useEffect(updateData, [])
  return (
    <Container>
      <ElevenKTable headers={headers} items={data}></ElevenKTable>
    </Container>
  )
}

export default Rank;