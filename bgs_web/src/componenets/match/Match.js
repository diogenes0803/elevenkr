import Container from 'react-bootstrap/Container';
import BGSTable from '../commons/BGSTable';
import { useState } from 'react';
import BGSClient from '../../lib/BGSClient';

const headers = ['유저이름', '상대아이디', '구분', '라운드1', '라운드2', '라운드3', 'ELO'];

function Match () {
  const [ data, setData] = useState(BGSClient.getMatches());
  return (
    <Container>
      <BGSTable headers={headers} items={data}></BGSTable>
    </Container>
  )
}

export default Match;