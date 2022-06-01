import Container from 'react-bootstrap/Container';
import ElevenKTable from '../commons/ElevenKTable';
import { useState, useEffect } from 'react';
import { getBlackLists } from '../../lib/ElevenKClient';

const headers = ['', '유저아이디', '유저이름', '비고'];

function Blacklist () {
  const [ data, setData] = useState([]);
    const updateData = () => {
    getBlackLists().then( res => {
      res.json().then( jsonRes => {
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

export default Blacklist;