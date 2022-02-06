import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState, useEffect } from 'react';
import { getMatches } from '../../lib/BGSClient';

const headers = ['Home', 'Away', '구분', '라운드1', '라운드2', '라운드3', 'ELO HOME', 'ELO AWAY'];

function Match () {
  const [ data, setData] = useState([]);
  const callAPIAndUpdate = () => {
    getMatches().then( res => {
      res.json().then( jsonRes => {
        setData(jsonRes);
      })
    })
  }
  const updateData = () => {
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