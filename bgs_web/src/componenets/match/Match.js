import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import { getMatches } from '../../lib/BGSClient';

const headers = ['Home', 'Away', '구분', '라운드1', '라운드2', '라운드3', 'ELO HOME', 'ELO AWAY'];

function Match () {
  const [ data, setData] = useState([]);
  const makeLink = (context, id) => {
    return <a target='_blank' rel="noreferrer" href={`https://elevenvr.net/eleven/${id}`}>{context}</a>
  }
  const updateData = () => {
    const callAPIAndUpdate = () => {
      getMatches().then( res => {
        res.json().then( jsonRes => {
          jsonRes.forEach( (obj) => {
            obj.user_name = makeLink(obj.user_name, obj.user_id);
            obj.opponent_name = makeLink(obj.opponent_name, obj.opponent_id);
            delete obj.user_id;
            delete obj.opponent_id;
          })
          setData(jsonRes);
        })
      })
    }
    callAPIAndUpdate();
    const interval = setInterval(callAPIAndUpdate, 5000);
    return () => {
      clearInterval(interval);
    }
  }

  useEffect(updateData, [])
  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )
}

export default Match;